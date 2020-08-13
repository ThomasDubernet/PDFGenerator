const btnAddTask = document.getElementById('addTask')

let count = 0
const addTask = function(e) {
    e.preventDefault()

    count++
    const groupTask = document.getElementById('groupTask')
    const groupInput = document.createElement('div')
    const input = document.createElement('input')
    const nameInput = "task" + count

    groupInput.classList.add('form-group')
    input.classList.add('form-control')
    input.setAttribute('type', 'text')
    input.setAttribute('name', nameInput)
    groupTask.appendChild(groupInput).appendChild(input)
}

btnAddTask.addEventListener('click', addTask)