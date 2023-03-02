function addToInput(value) {
  document.getElementById('input').value += value;
}

function reset() {
  document.getElementById('input').value = '';
}

function calculate() {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'handler.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      const result = xhr.responseText;
      window.location.href = result;
    }
  }
  let answer = 0
  try {
    answer = eval(document.getElementById('input').value);
    if (answer == undefined ) {
      throw new Error('error')
    }
  }
  catch {
    answer = 'error'
  }
  // window.location.href = '?result=' + encodeURIComponent(answer);
  xhr.send('result=' + encodeURIComponent(answer));
}