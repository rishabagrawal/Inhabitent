
(function($){
    $(function(){

    const searchIcon = $('.icon-search');
    const searchField = $('.search-field');

    searchIcon.on('click', function(event){
       event.preventDefault();
       searchField.toggle().focus();
   })
   searchField.on('blur', function(){
         searchField.hide('slow');
   })
}); //doc ready end 

}) (jQuery); // end of js file


