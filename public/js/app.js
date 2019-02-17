let editor = ace.edit('editor');

editor.setValue('select * from tracks');
editor.setShowPrintMargin(false);
editor.setTheme('ace/theme/monokai');
editor.session.setMode('ace/mode/sql');

document.querySelector('#run-sql').addEventListener('click', () => {
  let sql = editor.getValue();

  window.fetch('/query', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ sql })
  })
  .then(response => response.json())
  .then(buildHTML)
  .then((html) => {
    document.querySelector('#results').innerHTML = html;
  }, () => {
    document.querySelector('#results').innerHTML = 'No Results';
  });
});

function buildHTML(results) {
  if (results.length === 0) {
    return Promise.reject();
  }

  let columns = Object.keys(results[0]).map((key) => {
    return `<th>${key}</th>`;
  }).join('');

  let records = results.map((record) => {
    let values = Object.values(record).map((value) => {
      return `<td>${value}</td>`;
    }).join('');

    return `
      <tr>
        ${values}
      </tr>
    `;
  }).join('');

  return `
    <table class="table table-striped">
      <thead>
        ${columns}
      </thead>
      <tbody>
        ${records}
      </tbody>
    </table>
  `;
}
