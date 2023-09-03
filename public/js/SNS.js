$(function () {

  // アコーディオンメニュー
  $('.accordion-icon').click(function () {
    $(this).toggleClass('active');
    $(this).next().toggle();
    $('.accordion-content').toggleClass('active');
  });

  const buttonOpen = document.getElementById('modalOpen');
  const modal = document.getElementById('easyModal');
  const buttonClose = document.getElementsByClassName('modalClose')[0];



  // 編集モーダル
  $('.edit-icon').on('click', function () {
    $('.edit-modal').fadeIn();
    var post = $(this).attr('post');
    var post_id = $(this).attr('post_id');
    $('.modal-body').text(post);
    $('.modal_id').val(post_id);
    return false;
  });
  // ＊＊＊＊＊＊＊＊クリックイベントの詳細＊＊＊＊＊＊＊＊
  // .edit-iconをクリックしたら
  // .edit-modalをフワッと表示
  // postに　post属性の値を設定
  // post_idに　post_id属性の値を設定
  // .modal-bodyに　var post を渡す
  // .modal-idに　var post_id を渡す

  $('.modal-close').on('click', function () {
    // モーダルの中身(class="js-modal")を非表示
    $('.edit-modal').fadeOut();
    return false;
  });
});
