
function computeStats() {
  let input = document.getElementById('numbersInput').value.trim();
  let output = document.getElementById('output');
  output.innerHTML = '';

  if (!input) {
    output.innerHTML = '<span class="error">Please enter numbers!</span>';
    return;
  }
  let parts = input.split(/\s+/).filter(e=>e.length);
  if (!parts.every(p => /^-?\d+(\.\d+)?$/g.test(p))) {
    output.innerHTML = '<span class="error">Invalid input: Only numbers allowed.</span>';
    return;
  }
  let nums = parts.map(Number);
  let mean = nums.reduce((a,b)=>a+b, 0)/nums.length;
  let variance = nums.map(n=>(n-mean)**2).reduce((a,b)=>a+b,0)/nums.length;
  let std = Math.sqrt(variance);

  output.innerHTML =
    `<b>Mean:</b> ${mean.toFixed(3)}<br>` +
    `<b>Variance:</b> ${variance.toFixed(3)}<br>` +
    `<b>Standard Deviation:</b> ${std.toFixed(3)}`;
}

