Echo
    .channel(`news_for_user`)
    .listen('NewsCreated', (e) => {
        console.log(e);
        alert('Для вас доступна новая новость!');
    });

Echo
    .channel(`products_for_user`)
    .listen('ProductCreated', (e) => {
        console.log(e);
        alert('Для вас доступeн новый продукт!');
    });

function addAction(actionName)
{
    let actionUrlPath;
    let actionHtmlId;
    switch (actionName) {
        case 'product-company-create':
            actionHtmlId='product-company-button';
            actionUrlPath='/product-company-create';
            break;
        case 'news-company-create':
            actionHtmlId='news-company-button';
            actionUrlPath='/news-company-create';
            break;
        case 'news-company-subscribe':
            actionHtmlId='news-company-subscribe-button';
            actionUrlPath='/news-company-subscribe';
            break;
        case 'product-company-subscribe':
            actionHtmlId='product-company-subscribe-button';
            actionUrlPath='/products-company-subscribe';
            break;
        default:
            return false;
    }
    $('#' + actionHtmlId).on('click',function(){
        $.ajax({
            url: actionUrlPath,
            type: "POST",
            data: {},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if (data) alert(data);
            },
            error: function (msg) {
                console.log('addAction() error! Message:');
                console.log(msg);
            }
        });
    });

}

$(document).ready( function ()
{
    addAction('product-company-create');
    addAction('news-company-create');
    addAction('news-company-subscribe');
    addAction('product-company-subscribe');
});
