
<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="UTF-8">

  <title>Report</title>

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<style>

    body
    {
     // font-family: 'Open Sans', sans-serif;
	 
      width: 21cm;
      height: 22.7cm;
      margin: 0 auto;
      border: 15px solid #1b5fa0;
    }
	.fnt{
		 font-family: 'Roboto';
	  font-size: 17px;
	}
/*new-css*/
.meinhuas-content
{
  padding-left: 40px;
}
.meinhuas-content h4{ont-weight: 600;ont-size: 17px;}
.meinhuas-content h5{ont-weight: 600;ont-size: 17px;width: 50%;float: left;}
.meinhuas-content h4 span,.meinhuas-content h5 span{padding-left: 10px;}
.meinhuas-content.estimate
{
  padding-right: 40px;
}
.meinhuas-content ul{padding-left: 0;}
.book p
{
    padding-left: 40px;
    padding-right: 40px;
    text-align: justify;
}
/*new-css*/
    h1

    {

        font-size: 30px;

    text-transform: uppercase;

    font-weight: 500;

    }

    p{font-size: 15px;color: #000;margin-top: 15px;margin-bottom: 15px;}

    hr{border-top: 1px solid #ccc;}

    body button

    {

        display: block;

        margin: 15px auto;

        background: #1b5fa0;

        border-radius: 200px;

        padding: 5px 20px;

        border: none;

    }
    body button a{font-weight: bold;text-transform: uppercase;}
    p.description-box

        {

            text-align: justify;

            width: 50%;
            padding-left: 20px;
            float: left;

        }
        .meinhuas-content p span{padding-left: 10px;}
.meinhuas-content p
{    
    float: left;
    text-align: left!important;
    width: 35%;
    font-weight: 700!important;
    color: #2d292a!important;
    font-size: 13px!important;
}
    body button a{color: #fff;text-decoration: none;
    }

    a:hover, a:focus{color: #fff;text-decoration: none;}

    p a{color: #136acd;font-weight: 600;}

    p a:hover{color: #136acd;}

    .invoice {width: 950px;padding-top: 50px;margin: 0 auto;text-align: center;}

    .meinhaus-header .meinhuas-content {width: 100%;float: none;}
    .meinhaus-header h1{text-align: center;color:#1d5e96;font-weight: bold;padding-top: 30px;}
    .meinhaus-header p{text-align: center;font-weight: bold;font-size: 17px;}
    .meinhaus-header .meinhuas-content img{width: 30%;}

    .estimate h1,.estimate p{text-align: right!important;}

    .meinhaus-header .meinhuas-content p{font-weight: 700;}

    .estimate p{font-weight: normal!important;}

    .meinhuas-content ul li{list-style: none;margin-bottom: 5px;}

    .estimate ul{float: right;padding-right: 0px;}/*padding-right: 30px;*/

    .estimate ul li span{}

    .estimate ul li b{}

    .table{width: 100%;border: 1px solid rgb(51 51 51 / 20%);

    border-spacing: 0;}

    thead tr{background:#541a1a;}

    thead tr th{text-align: left;color: #fff;padding: 10px 15px;}

    tbody tr td{padding: 10px 15px;}

    .hst{font-weight: normal;}

    .table-two{border: none;}

    .table-two{float: right;width: 41%;margin-top: 5px;}

    .table-two tbody tr th{text-align: right;}

    .table-two tbody tr td,.table-two tbody tr th{border-bottom: 1px solid rgb(51 51 51 / 20%)}

    .div-table{height: 300px;}

    .book img{width: 20%;margin: 0 auto;display: block;}

    .book h4{text-align: center;margin-bottom: 0;margin-top: -10px;}



    @media(max-width:1024px)

    {

    

    .table-two{width: 48%;}

    }

    @media(max-width:414px)

    {

       .main-section{width: auto;}
  
       .book p

        {

         font-size: 13px!important;

         text-align: justify!important;

        }

    }

    /* .main-section{width: 860px;margin: 0 auto; padding: 30px 0px;} */

</style>

<body>
    <!--<div style="margin-left:52%;">
        <button id="genHB2" style="border-radius:10px;padding:10px;background-color:#e74c3c;"><a onclick="generatePDF()" href="javascript:;">Download as PDF</a></button>
    </div> -->
<section class="main-section" id="invoice" style="margin-top:0px;">

<div class="meinhaus-header">

  
      <h1 ><?php echo $id; ?></h1>
      <button id="genHB"><a href="javascript:void(0) " class="fnt">Student Your Record</a></button>
      <p class="fnt">Fill in Capital Letters</p>




</div>

<div class="meinhaus-header">

    <div class="meinhuas-content">

      <h4 class="fnt">Name: <span class="fnt">AYUSHMAN AGARWAL</span></h4>
      <h4 class="fnt">Stufit ID (For Office use only)</h4>
      <h5 class="fnt">Class/Sec: <span class="fnt">7<sup>th</sup> A</span></h5>
      <h5 class="fnt">Gender: <span class="fnt">MALE</span></h5>
      <h4 class="fnt">Mother's Name: <span class="fnt">MEENAKHSI AGARWAL</span></h4>
      <h4 class="fnt">Father's Name: <span class="fnt">PUNEET AGARWAL</span></h4>
      <h5 class="fnt">Date of Birth: <span class="fnt">26-03-08</span></h5>
      <h5 class="fnt">Blood Group: <span class="fnt">A</span></h5>
      <h4 class="fnt">Address: <span class="fnt">Kanhaiya Jewellers, Near Kotwali, Main Road, Lakhimpur Kheri.</span></h4>
      <h4 class="fnt">E-mail ID: </h4>
      <h5 class="fnt">Phone No: (Father):<span class="fnt">+91 - <sup> </span></h5>
      <h5 class="fnt">Phone No: (Mother):<span class="fnt">+91 - <sup> </span></h5>
      <h4 class="fnt">Name of Sibling(s) in the school: </h4>
      <h5 class="fnt">1. ADWITA AGARWAL</h5>
      <h5 class="fnt">Class/Sec: 3<sup class="fnt">rd</sup><span class="fnt">A</span></h5>
      <h5 class="fnt">2. ------------</h5>
      <h5 class="fnt">Class/Sec: <span class="fnt">------------</span></h5>

      <p class="fnt">Date: 03 March 2020</p>
      <p class="fnt">Doctor's Signature: </p>
      <p class="fnt">Place: Lakhimpur</p>
      <p class="fnt">Doctor's Name: Dr. S. Haider</p>
    </div>



</div>




</section>



<script>
    function generatePDF() {
        var a = document.getElementById("genHB");
        a.setAttribute("style", "visibility:visible;");
    //     var b = document.getElementById("genHB2");
    // 	b.setAttribute("style", "visibility:hidden;");
        const element = document.getElementById('invoice');
        const opt = {
            filename: 'invoice.pdf'
        };
        html2pdf().set(opt).from(element).save();
        window.setTimeout(function(){location.reload()},100)
    }
    </script>

</body>

</html>