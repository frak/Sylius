<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Behat\Page\Shop\Account\AddressBook;

use Sylius\Behat\Page\SymfonyPage;
use Sylius\Component\Core\Model\AddressInterface;

/**
 * @author Anna Walasek <anna.walasek@lakion.com>
 */
class CreatePage extends SymfonyPage implements CreatePageInterface
{
    /**
     * {@inheritdoc}
     */
    public function getRouteName()
    {
        return 'sylius_shop_account_address_book_create';
    }

    /**
     * {@inheritdoc}
     */
    public function fillAddressData(AddressInterface $address)
    {
        $this->getElement('first_name')->setValue($address->getFirstName());
        $this->getElement('last_name')->setValue($address->getLastName());
        $this->getElement('street')->setValue($address->getStreet());
        $this->getElement('country')->selectOption($address->getCountryCode() ?: 'Select');
        $this->getElement('city')->setValue($address->getCity());
        $this->getElement('postcode')->setValue($address->getPostcode());
    }

    /**
     * {@inheritdoc}
     */
    public function saveAddress()
    {
        $this->getElement('save_button')->press();
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefinedElements()
    {
        return array_merge(parent::getDefinedElements(), [
            'city' => '#sylius_address_city',
            'country' => '#sylius_address_countryCode',
            'first_name' => '#sylius_address_firstName',
            'last_name' => '#sylius_address_lastName',
            'postcode' => '#sylius_address_postcode',
            'save_button' => 'button:contains("Save")',
            'street' => '#sylius_address_street',
        ]);
    }
}