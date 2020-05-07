function getTotalItemCarts() {
    $.ajax({
        type: 'get',
        url: 'home/get-total-cart',
        data: {},
        success: function (data) {
            $('.top_right ').append(`<style>li.cart a:before{content: "${data}"!important;}</style>`);
        }
    });
}

