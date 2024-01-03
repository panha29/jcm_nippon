{{-- <script>
    function filter_name() {
           var input, filter, table, tr, td, i, tbody1;
           input = document.getElementById("myInput");
           filter = input.value.toUpperCase();
           tbody1 = document.getElementById("tbody1");
           tr = tbody1.getElementsByTagName("tr");
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
</script> --}}
<script>
    function filter_name() {
           var input, filter, table, tr, td, i, tbodyma, tbodywb, tbodympm, tbodynsew, tbodywg, tbodyall;
           input = document.getElementById("myInput");
           filter = input.value.toUpperCase();
           tbodyma = document.getElementById("tbodyma");
           tbodywb = document.getElementById("tbodywb");
           tbodympm = document.getElementById("tbodympm");
           tbodynsew = document.getElementById("tbodynsew");
           tbodywg = document.getElementById("tbodywg");
           tbodyall = document.getElementById("tbodyall");
           tr1 = tbodyma.getElementsByTagName("tr");
           tr2 = tbodywb.getElementsByTagName("tr");
           tr3 = tbodympm.getElementsByTagName("tr");
           tr4 = tbodynsew.getElementsByTagName("tr");
           tr5 = tbodywg.getElementsByTagName("tr");
           tr6 = tbodyall.getElementsByTagName("tr");

           for (var i = 0; i < tr1.length; i++) {
               var tds1 = tr1[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds1.length; j++){
               var td1 = tds1[j];
               if (td1.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr1[i].style.display = "";
                }
                else {
                    tr1[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr2.length; i++) {
               var tds2 = tr2[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds2.length; j++){
               var td2 = tds2[j];
               if (td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr2[i].style.display = "";
                }
                else {
                    tr2[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr3.length; i++) {
               var tds3 = tr3[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds3.length; j++){
               var td3 = tds3[j];
               if (td3.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr3[i].style.display = "";
                }
                else {
                    tr3[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr4.length; i++) {
               var tds4 = tr4[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds4.length; j++){
               var td4 = tds4[j];
               if (td4.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr4[i].style.display = "";
                }
                else {
                    tr4[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr5.length; i++) {
               var tds5 = tr5[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds5.length; j++){
               var td5 = tds5[j];
               if (td5.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr5[i].style.display = "";
                }
                else {
                    tr5[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr6.length; i++) {
               var tds6 = tr6[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds6.length; j++){
               var td6 = tds6[j];
               if (td6.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr6[i].style.display = "";
                }
                else {
                    tr6[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr7.length; i++) {
               var tds7 = tr7[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds7.length; j++){
               var td7 = tds7[j];
               if (td7.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr7[i].style.display = "";
                }
                else {
                    tr7[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr8.length; i++) {
               var tds8 = tr8[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds8.length; j++){
               var td8 = tds8[j];
               if (td8.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr8[i].style.display = "";
                }
                else {
                    tr8[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr9.length; i++) {
               var tds9 = tr9[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds9.length; j++){
               var td9 = tds9[j];
               if (td9.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr9[i].style.display = "";
                }
                else {
                    tr9[i].style.display = "none";
                }
            }

            for (var i = 0; i < tr10.length; i++) {
               var tds10 = tr10[i].getElementsByTagName("td");
               var flag = false;
            for(var j = 0; j < tds10.length; j++){
               var td10 = tds10[j];
               if (td10.innerHTML.toUpperCase().indexOf(filter) > -1) {
                   flag = true;
                }
                }
                if(flag){
                    tr10[i].style.display = "";
                }
                else {
                    tr10[i].style.display = "none";
                }
            }
       }
</script>
