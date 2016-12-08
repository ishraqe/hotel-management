// $(document).ready(function() {
//     var name = $("#login_name");
//     var nameMsg = $("#username-input-msg-slide");

//     var email = $("#login_mail");
//     var emailMsg = $("#email-input-msg-slide");

//     var password=$("#login_password");
//     var passwordMsg=$("#password-input-msg-slide");

//     name.click(function() {
//         if(emailMsg.hasClass("login_input")) {
//             emailMsg.removeClass('login_input animated slideInRight');
//             emailMsg.addClass('login_input animated slideOutRight');
//         }

//         if (nameMsg.hasClass("slideOutRight")) {
//             nameMsg.removeClass("login_input animated slideOutRight");
//             nameMsg.addClass('login_input animated slideInRight');
//         } else {
//             nameMsg.removeClass('login_input');
//             nameMsg.addClass('showit animated slideInRight');
//         }
//     });

//     email.click(function() {
//         if(nameMsg.hasClass("login_input")) {
//             nameMsg.removeClass('slideInRight');
//             nameMsg.addClass('slideOutRight');
//         }
//         if (emailMsg.hasClass("slideOutRight")) {
//             emailMsg.removeClass("showit animated slideOutRight");
//             emailMsg.addClass('showit animated slideInRight');
//         } else {
//             emailMsg.removeClass('login_input');
//             emailMsg.addClass('showit animated slideInRight');
//         }
//     });
// });

$('.hintable').focus(function() {
   $('.example').hide();
   $("."+$(this).attr('hint-class')).show();
});

$('.hintable').blur(function() {
   $('.example').hide();
});