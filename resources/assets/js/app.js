
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

$('#editJournal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var title = button.data('title')
    var modal = $(this)

    modal.find('.modal-body #title').val(title)
    modal.find('.modal-body #id').val(id)
})

$('#editTask').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var title = button.data('title')
    var description = button.data('description')
    var status = button.data('status')
    var hours = button.data('hours')

    console.log(id)
    console.log(title)
    console.log(description)
    console.log(status)
    console.log(hours)

    var modal = $(this)
    
    modal.find('.modal-body #id').val(id)
    modal.find('.modal-body #title').val(title)
    modal.find('.modal-body #description').val(description)
    modal.find('.modal-body #status').val(status)
    modal.find('.modal-body #description').val(description)
    modal.find('.modal-body #hoursSpent').val(hours) 
})