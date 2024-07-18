    </div>
</body>

<script>
    $(document).ready(function(){
        $("#sidebarToggler").click(function(){
        if($("#sidebar").hasClass("-left-48")) {
            $("#sidebar").removeClass("-left-48")
            $("#sidebar").addClass("left-0")
        } else {
            $("#sidebar").addClass("-left-48")
            $("#sidebar").removeClass("left-0")
        }
    })
    })
</script>

</html>