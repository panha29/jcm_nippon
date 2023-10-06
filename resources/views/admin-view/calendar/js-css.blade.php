{{-- <link rel="stylesheet" href="/css/vendor/jquery-dataTables.min.css">
<link rel="stylesheet" href="/css/semantic/semantic.min.css">
<link rel="stylesheet" href="/css/semantic/dataTables-semanticui.min.css">
<link href="https://fonts.googleapis.com/css2?family=Nokora&display=swap" rel="stylesheet"> --}}


{{-- <script src="/js/cs/scrollspy.js"></script> --}}
{{-- <script src="/js/semantic_ui/jquery-3-5-1.js"></script> --}}
{{-- <script src="/js/vendor/datepicker/bootstrap-datepicker.min.js"></script> --}}
{{-- <script src="/js/vendor/datepicker/locales/bootstrap-datepicker.es.min.js"></script> --}}
{{-- <script src="/js/vendor/jquery-slim-3-2-1.min.js"></script> --}}
{{-- <script src="/js/semantic_ui/jquery-dataTables.min.js"></script>
<script src="/js/semantic_ui/semantic.min.js"></script>
<script src="/js/semantic_ui/dataTables-semanticui.min.js"></script> --}}

<script>
    function filter_calendar() {
        var input, filter, table, tr, td, i, tbody;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        tbody = document.getElementById("tbody");
        tr = tbody.getElementsByTagName("tr");
        // tr = table.getElementsByTagName("tr");
        for (var i = 0; i < tr.length; i++) {
            var tds = tr[i].getElementsByTagName("td");
            var flag = false;
            for(var j = 0; j < tds.length; j++){
            var td = tds[j];
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                flag = true;
            }
            }
            if(flag){
                tr[i].style.display = "";
            }
            else {
                tr[i].style.display = "none";
            }
        }
    }
</script>

<style>
    .scrollbar
{
	float: left;
	height: 70px;
	width: 60px;
	overflow-y: scroll;
}
/* .force-overflow
{
	min-width: 500px;
} */
#style-1::-webkit-scrollbar-track
{
    overflow: overlay;
	-webkit-box-shadow: inset 0 0 0px rgb(197, 197, 197);
	border-radius: 10px;
	/* background-color: #F5F5F5; */
}

#style-1::-webkit-scrollbar
{
    width: 2px;
	/* background-color: #dfdfdf; */
}

#style-1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	/* -webkit-box-shadow: inset 0 0 6px rgb(202, 202, 202); */
	-webkit-box-shadow: inset 0 0 6px rgb(235, 235, 235);

	background-color: #b9b8b8;
}

.td-date{
    width: 9%;
}
</style>
