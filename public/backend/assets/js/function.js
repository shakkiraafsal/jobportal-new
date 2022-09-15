
    function Display() 
    {

  var x = document.getElementById('snationality').value;
  var y = document.getElementById('snational');
  if (x === 'Other')
   {
   
    y.style.display = 'block';
    document.getElementById("snational").value = ""; 
    
  } 
  else
   {
    y.style.display = 'none';
     document.getElementById("snational").value = x; 
  }
} 

function Numbercheck()
{
  var x = document.getElementById('sphnone').value;
  var y = document.getElementById('saltphnone').value;
  {
    if (x==y) 
    {
        
        
        document.getElementById('continue').disabled = true;
        document.getElementById("W-message").innerHTML = "Secondary number should no be same as primary number";
    }
    else
    {
        document.getElementById('continue').disabled = false; 
         document.getElementById("W-message").innerHTML="";

    }
  }
}