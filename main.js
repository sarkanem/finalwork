// JQuery for pagination

var numberOfItems = $('#all-episodes .list-group').length;
var limitPerPage = 3;

$('#all-episodes .list-group:gt(' + (limitPerPage - 1) + ')').hide(); // gt() selects all indexes that are greater than the set

var totalPages = Math.ceil(numberOfItems / limitPerPage);

$(".pagination").append("<li class='current-page active'><a class='page-link' href='javascript:void(0)'>" + 1 + "</a></li>"); 

for (var i = 2; i <= totalPages; i++) {
  $(".pagination").append("<li class='current-page'><a class='page-link' href='javascript:void(0)'>" + i + "</a></li>"); 
}

$(".pagination").append("<li id='next-page'><a class='page-link' href='javascript:void(0)' aria-label='Next'><span aria-hidden=true>&raquo;</span></a></li>");

$(".pagination li.current-page").click(function() {
        if ($(this).hasClass('active')) {
            return false;
        } else {
            var currentPage = $(this).index(); 
            $(".pagination li").removeClass('active'); 
            $(this).addClass('active'); 
            $("#all-episodes .list-group").hide();
            var grandTotal = limitPerPage * currentPage; 

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
            $("#all-episodes .list-group:eq(" + i + ")").show(); // eq() selects current index in the set
            }
        }
});

$("#next-page").click(function() {
        var currentPage = $(".pagination li.active").index(); 
        if (currentPage === totalPages) {
            return false; 
        } else {
            currentPage++; 
            $(".pagination li").removeClass('active'); 
            $("#all-episodes .list-group").hide(); 
            var grandTotal = limitPerPage * currentPage;

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
            $("#all-episodes .list-group:eq(" + i + ")").show();
            }

            $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active'); 
        }
});

$("#previous-page").click(function() {
        var currentPage = $(".pagination li.active").index(); 
        if (currentPage === 1) {
            return false;
        } else {
            currentPage--; 
            $(".pagination li").removeClass('active'); 
            $("#all-episodes .list-group").hide(); 
            var grandTotal = limitPerPage * currentPage; 

            for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
            $("#all-episodes .list-group:eq(" + i + ")").show(); 
            }

            $(".pagination li.current-page:eq(" + (currentPage - 1) + ")").addClass('active'); 
        }
});


// JQuery for chatroom

$('.btn').click(function(){
   var message =  $('#chatMessage').val();
   var username =  $('#chatName').val();;
   var content = $('#chatWindow').html();

   // getting date in an appropriate format
   function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
    }

    var d = new Date();
    var strDate =  d.getDate() + "." +  (d.getMonth()+1) + "." + d.getFullYear() + ".    " + addZero(d.getHours()) + ":" + addZero(d.getMinutes());

    if(username != "" && message != ""){
        $('#chatWindow').html(content + '<p> <span class="user">' + username + ':</span>   ' + strDate + '<br>' + message + '</p>');
        $('#chatMessage').val(''); 
        $('#chatName').val(''); 
    }
});
