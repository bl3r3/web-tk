const attachInput = document.getElementById('attach');
const attachStyler = document.getElementById('attach-style');
attachInput.addEventListener('change', (event) => {
    const filePath = event.target.value;
    const fileHasBeenAttached = () => filePath != "";
    if(fileHasBeenAttached()) {
        attachStyler.innerText = 'File attached!';
    } else {
        attachStyler.innerText = 'Attach a file';
    }
});