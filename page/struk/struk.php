<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<style>  
  table {  
    font-family: arial, sans-serif;  
    border-collapse: collapse;  
    width: 50%;
    margin: 0px auto;
  }
  #htmlContent{
    text-align: center;
  }  
  td, th, button {  
    border: 1px solid #dddddd;  
    text-align: left;  
    padding: 8px;  
  }  
  button {  
    border: 1px solid black;   
  } 
  tr:nth-child(even) {  
    background-color: #dddddd;  
  }  
</style>  
<div id="htmlContent">
  <h2 style="color: #0094ff">Hello</h2>  
  <h3>About this Code:</h3>  
  <p>Demo of how to convert and Download HTML page to PDF file with CSS, using JavaScript and jQuery.</p>  
  <table>  
    <tbody>  
      <tr>  
        <th>Person</th>  
        <th>Contact</th>  
        <th>Country</th>  
      </tr>  
      <tr>  
        <td>John</td>  
        <td>+2345678910</td>  
        <td>Germany</td>  
      </tr>  
      <tr>  
        <td>Jacob</td>  
        <td>+1234567890</td>  
        <td>Mexico</td>  
      </tr>  
      <tr>  
        <td>Eleven</td>  
        <td>+91234567802</td>  
        <td>Austria</td>  
      </tr>  
    </tbody>  
  </table>    
</div>
<div id="editor"></div>
<center>
  <p>
    <button id="generatePDF">generate PDF</button>
  </p>
 Ref:<a href="https://phpcoder.tech">phpcoder.tech</a>
</center>