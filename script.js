$('#form').on("keyup", function(e) {
  pseudo = $("#pseudo").val();
  password = $("#password").val();

  query = "SELECT * FROM users WHERE pseudo='"+pseudo+"' AND password='"+password+"'";

  query = query.replace(/#(.*)/g, "<span class='barre'>$&</span>");

  $("#result").html(query);
});
