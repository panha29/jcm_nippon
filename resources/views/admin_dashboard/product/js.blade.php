<script>
    function updateform(){
            var input = document.getElementsByName("product_category");
            var inputList = Array.prototype.slice.call(input);

            inputList.forEach(ShowResults);

            function ShowResults(value, index, ar) {
                if(value.selected)
                {
                    var j = value.getAttribute('data-value');
                    document.getElementById("product_tag").value = j;

                }
            }
    }
    var users = document.querySelectorAll('.form-control')
    users.forEach(function(user) {
        user.addEventListener('click', function() {
        var userId = this.getAttribute('data-value')
    console.log(this.getAttribute('data-value'));
      })
    })
</script>

