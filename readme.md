Magento custom address attribute module
=======================================
This module adds a new attribute to the customer's addresses in Magento.

Compatibility
-------------
This module has been tested with Magento 1.7.0.2. and 1.6.1.0.

License
-------
Everyone is permitted to use, copy and distribute verbatim or modified copies of the code as long as there is a hyperlink to http://i.amniels.com/magento-custom-address-attribute without the nofollow attribute published with the copy. This module comes without warranty.

Usage
-----
1. This module adds the attribute `building` to the addresses. Replace all occurrences of `building` in the code with your own attribute name.
2. Copy the code to the Magento root folder.
3. Go to the Magento admin panel -> System -> Configuration -> Customer configuration -> Address templates and add the new attribute to the templates.
4. Add the new address to all forms on the Magento front-end. See `app/design/frontend/default/iamniels` for example template files.