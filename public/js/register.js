// 会員登録　基本情報→q1-q5

// (function() {
//   $("#submit-r1").on("click", function() {
//     $("#r1").css("visibility", "hidden");
//     $("#r1").css("z-index", "2");
//     $("#submit-r2").css("visibility", "visible");
//     $("#r2").css("z-index", "3");
//   });
// })();

(function() {
  //   $("#submit-r1").on("click", function() {
  //     console.log("ok");
  $("#submit-r1").on("click", function() {
    $("#r1").css("visibility", "hidden");
    $("#r1").css("z-index", "2");
    $("#r2").css("visibility", "visible");
    $("#r2").css("z-index", "3");
  });
})();
