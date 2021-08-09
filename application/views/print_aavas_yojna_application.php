<?php date_default_timezone_set('Asia/Kolkata'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<style type="text/css">
   @media print {

    .advance-table {
      overflow-x: hidden!important;
    }
tr.item-type-ttl {
  background-color:#ffc0cb75 !important;
  -webkit-print-color-adjust: exact;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 4px double #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.summ {
  text-align: center;
    font-weight: 700;
    padding-top: 10px;
    padding-bottom: 10px;
    font-family: sans-serif;
    font-size: 24px;
}


}


@page {
    margin: 0.5cm;
}
</style>
 <div>
   
 </div>
</body>
</html>

<script type="text/javascript">
 window.onload=function(){
  setTimeout(function(){
    window.print();
   // window.close();
  },100);
}
</script>