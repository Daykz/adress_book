<?php

	class AddressBook extends ArrayObject {

		function	__construct()
		{
			parent::__construct();
			$this->setFlags(ArrayObject::STD_PROP_LIST|ArrayObject::ARRAY_AS_PROPS);
			return ;
		}

		function	addContact(Contact $contact)
		{
			$this->append($contact);
		}

		function	getContactByName($name)
		{
			foreach ($this as $currentContact)
			{
				if ($currentContact->getName() == $name)
					return ($currentContact);
			}
		}

	}