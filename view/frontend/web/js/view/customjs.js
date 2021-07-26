define([
    'jquery',
    'ko',
    'uiComponent',
    "mage/calendar"], function ($, ko, Component) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'RLTSquare_DeliveryTime/customtemp'
        }
    });
});
