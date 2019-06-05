
(function($){
    $(function(){

    const searchIcon = $('.site-header .icon-search');
    const searchField = $('.site-header .search-field');

    searchIcon.on('click', function(event){
       event.preventDefault();
       searchField.toggle().focus();
   })
   searchField.on('blur', function(){
       if (searchField.val() === ''){
         searchField.hide('slow');
       }
   })
}); //doc ready end 

}) (jQuery); // end of js file


