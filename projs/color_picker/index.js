//Pretty Print
const print = (item) => console.log(item);

//get canvas data
const canvas = document.getElementById(`canvas`);
const ctx = canvas.getContext('2d');

const canvasData = {
    height:canvas.height,
    width:canvas.width
}
//init colorStorage
let colorStorage = [];
//access stored data list
const list = document.getElementById(`list`);

//Rows & Col
let gridSetting = {
    nRows:6,
    nCols:3,
    gridWidth:100,
    gridHeight:200
}

const getRandColor = () => `#${Math.floor(Math.random()*0xffffff).toString(16).padStart(6,`0`)}`;

const drawRand = ()=>{
    colorStorage = [];
    for(i=0;i<gridSetting.nRows;i++){
        for(j=0;j<gridSetting.nCols;j++){
            ctx.fillStyle = getRandColor();
            colorStorage.push(ctx.fillStyle);
            ctx.fillRect(i*gridSetting.gridWidth+2.5,j*gridSetting.gridHeight+2.5,gridSetting.gridWidth-5,gridSetting.gridHeight-5);
        }
    }
}

//init
drawRand();
print(colorStorage);

//generate button
const redrawBtn = document.getElementById(`generate-btn`);
redrawBtn.addEventListener('click',drawRand);

//remove selected color
const removeSavedColor = (e)=>{
    list.removeChild(e.target.parentElement);
}

//enqueue new selected color
const addColorToList = (colorCode)=>{

    let savedColor = document.createElement('div');
    savedColor.setAttribute(`class`,`saved-color`);
    savedColor.setAttribute(`style`, `background-color:${colorCode}`);

    let colorCodeText = document.createElement('div');
    colorCodeText.setAttribute(`class`,`display-color`);
    colorCodeText.setAttribute(`style`, `background-color:#fafafa`);
    colorCodeText.innerHTML = colorCode
    colorCodeText.addEventListener('click', (e)=>{
        navigator.clipboard.writeText(colorCodeText.innerHTML);
        alert("color hex code copied to your clipboard:  " + colorCodeText.innerHTML);
    });

    let removeBtn = document.createElement('span');
    removeBtn.innerHTML = "—";
    removeBtn.addEventListener('click', (e)=>{removeSavedColor(e)});
    removeBtn.setAttribute(`class`,`remove-btn`);
    
    savedColor.appendChild(colorCodeText);
    savedColor.appendChild(removeBtn);

    list.appendChild(savedColor);
}


//extract color from color storage using offset on canvas
const extractPixelColor = (e)=>{
    let {offsetX,offsetY} = e;
    offsetX = offsetX*gridSetting.nRows/canvas.getBoundingClientRect().width;//Re-ratio offset pixel to canvas pixel
    offsetY = offsetY*gridSetting.nCols/canvas.getBoundingClientRect().height;
    res = colorStorage[Math.floor(offsetX)*gridSetting.nCols + Math.floor(offsetY)];
    addColorToList(res);
}

canvas.addEventListener('click', (e)=>extractPixelColor(e));

//toggle color mode
const switchBtn = document.getElementById(`switch`);
switchBtn.addEventListener('change',(e)=>{
    print("Change Theme");
    document.body.classList.toggle('dark');
    document.getElementById(`canvas`).classList.toggle(`dark`);
});
