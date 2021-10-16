let Increment = 1;
document.getElementById('add-new-option').onclick = function () {
    let template = `
        <textarea id="opt" class="opt" name="opt[]" placeholder="Option" value="${Increment}"style="width: 1202px; height: 50px;"></textarea>
        <button type="button" id="bt" onclick="return this.parentNode.remove(); ">Delete</button>`;
    let container = document.getElementById('option-container');
    let div = document.createElement('div');
    div.innerHTML = template;
    container.appendChild(div);
    Increment++;
}
