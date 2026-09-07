(function(api) {

    api.sectionConstructor['swimming-pool-service-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);