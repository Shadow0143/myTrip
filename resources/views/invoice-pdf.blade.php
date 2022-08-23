<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <button type="button" onclick="PrintDiv()" style="background-color: #99ccff;border: 1px solid #99ccff;padding: 5px;font-size: 15px;font-weight: 600;margin-bottom:10px;">Print</button>
    </section>
    <section id="printdivcontent">
        @if(count($invoice) > 0)
            {!! html_entity_decode($invoice[0]->invoice) !!}
        @else
            <p>No data</p>
        @endif
    </section>
    <script type="text/javascript">  
        function PrintDiv()  {  
           var divContents = document.getElementById("printdivcontent").innerHTML;  
           var printWindow = window.open('', '', 'height=auto,width=auto');  
           printWindow.document.write('<html><head><title>Meilleur Holidays || Your Travel Partner</title>');  
           printWindow.document.write('</head><body><section>');  
           printWindow.document.write(divContents);  
           printWindow.document.write('</section></body></html>');  
           printWindow.document.close();  
           printWindow.print();  
        }  
    </script>  
</body>
</html>