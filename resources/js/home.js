//console.log('home.js is loaded');

Echo
    .private(`chat.${comments.channel}`)
    .listen('ChatMessage', (e) => {
        /**
         * Действия, происходящие при получении события клиентом
         * напр. console.log(e);
         */
        console.log(comments);
        // comments.list.find('ul > li.empty').remove();
        // comments.list.find('ul').append(e.view);
        // comments.count.text(parseInt(comments.count.text()) + 1);
        // comments.list.scrollTop(9999999999);
        // comments.sound.play();
    });

$(document).ready( function ()
{
    $('#comment_add_button').on('click',function(){

        $.ajax({

            url: "/tasks",

            type: "POST",

            data: {some_data:'some_data'},

            headers: {

                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')

            },

            success: function (data) {
                console.log(data);
                alert( 'ajax is succeed' );
            },

            error: function (msg) {

                alert( 'ajax is failed' );

            }

        });

    });

});
