<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>WP REST APIテストページ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
      $(function() {
          $.getJSON( "https://e-yota.com/wp-json/wp/v2/posts?per_page=3", function(results) {
              $.each(results, function(i, item) {
                 $("ul#mylist").append("<li>" + item.title.rendered + "</li>");
              });
          });
      });
    </script>
  </head>
  <body>
    <h2>タイトル 最新3件</h2>
    <ul id="mylist">

    </ul>
  </body>
</html>
