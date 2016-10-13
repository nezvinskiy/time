
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

/**
 * Your code here.
 */
$(document).ready(function() {

    /**
     * Displays confirmation window send forms to remove the element.
     */
    $("form.form-delete").submit(function(event) {
        var msg = $(this).find(":submit").attr('data-confirm');
        if (msg && !confirm(msg))
            event.preventDefault();
    });

});
