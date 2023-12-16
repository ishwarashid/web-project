
document.getElementById("h1").addEventListener('click', function(){
    $.ajax({
        url: 'data.php',
        dataType:'json',
        success: function(data) {
          var name = data['starters'];
          var age = data.seafood;
          var city = data.desserts;
          console.log(data);
        }
      });
})
