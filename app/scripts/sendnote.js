//javascript code that intercepts form submission to add drawingboard content to the form data sent to the server

var myBoard = new DrawingBoard.Board('board');

$('.drawing-form').on('submit', function(e) {
   //get drawingboard content
  var img = myBoard.getImg();
  
  //we keep drawingboard content only if it's not the 'blank canvas'
  var imgInput = (myBoard.blankCanvas == img) ? '' : img;
  
  //put the drawingboard content in the form field to send it to the server
  $(this).find('input[name=image]').val( imgInput );

  //we can also assume that everything goes well server-side
  //and directly clear webstorage here so that the drawing isn't shown again after form submission
  //but the best would be to do when the server answers that everything went well
  myBoard.clearWebStorage();
});