// Add an event listener to the form
function updation() 
{

    // Get the selected option and the new value
    const selectedOption = document.getElementById("options").value;
    const newValue = document.getElementById("num").value;

    // Update the value in the corresponding element
    const oldElement = document.getElementById(`${selectedOption.toLowerCase()}pre`);
    const newElement = document.getElementById(`${selectedOption.toLowerCase()}new`);

    oldElement.innerHTML = newElement.innerHTML;
    newElement.innerHTML = newValue;
}
