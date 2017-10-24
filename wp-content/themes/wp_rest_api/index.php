<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>WP REST APIテストページ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
      $(function() {
          // エコテキブログのエンドポイントから"高橋一生"で検索した結果の記事のタイトルを表示する
          $.getJSON( "https://e-yota.com/wp-json/wp/v2/posts?search=高橋一生", function(results) {
              $.each(results, function(i, item) {
                 $("ul#mylist").append("<li>" + item.title.rendered + "</li>");
              });
          });
      });
    </script>
  </head>
  <body>
    <h2>高橋一生さんに関する記事のタイトル</h2>
    <ul id="mylist">

    </ul>
  </body>
</html>
