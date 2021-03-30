let currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");
    // This function will display the specified tab of the form ...
    let tab = document.getElementsByClassName("tab");
    tab[n].style.display = "flex";
    // ... and fix the Previous/Next buttons:
    n === 0 ? prevBtn.style.display = "none" : prevBtn.style.display = "inline";
    n === tab.length - 1 ? nextBtn.textContent = "Submit" : nextBtn.textContent = "Дальше →";
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  let tab = document.getElementsByClassName("tab");
  // Hide the current tab:
  tab[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab += n;
  // if you have reached the end of the form... :
  if (currentTab >= tab.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  const stepIndicator = document.getElementsByClassName("step");
  for (const step of stepIndicator) {
    step.className = step.className.replace(" active", "");
  }
  stepIndicator[currentTab].className += " finish";
  //... and adds the "active" class to the current step:
  stepIndicator[n].className += " active";
}











// first step change area order
let selectedWarehouse = 'centrs';
const defaultFirstWarehouse = 'imanta';

const defaultWarehouse = document.querySelector('.' + defaultFirstWarehouse);
const firstElement = document.querySelector('.' + selectedWarehouse);

const parent = defaultWarehouse.parentNode;

// parent.insertBefore(firstElement, parent.firstChild);



// First AND Second step track which AREA and TERM was selected
const selectedArea = document.querySelectorAll('input[name="area"]');
const selectedTerm = document.querySelectorAll('input[name="term"]');

const dropdownArea = document.querySelector('.final-area');



const arr = [selectedArea, selectedTerm];

function showData() {
  for (const element of arr) {
    for (const input of element) {
      if (selectedWarehouse === input.value) {
        input.checked = true;
      }
      if (input.checked) {
        dropdownArea.value = input.value;
        console.log(input.value);
      }
    }
  }
  selectedWarehouse = '';
}

for (const element of arr) {
  for (const input of element) {
    input.addEventListener('change', showData);
  }
}




// Third step track which SIZE was selected
const selectedSize = document.querySelectorAll('input[name="size"]');
const visualSize = document.querySelectorAll('.tab__visual');

function showVisual() {
  for (const key of visualSize) {
    key.style.display = 'none';
  }

  for (let i = 0; i < selectedSize.length; i++) {
    if (selectedSize[i].checked && selectedSize[i].value === visualSize[i].id) {
      console.log(selectedSize[i].value);
      visualSize[i].style.display = 'flex';
    }
  }
}

for (const size of selectedSize) {
  size.addEventListener('change', showVisual);
}





// transport needed
const transport = document.querySelectorAll('input[name="transport"]');

function needTransport() {
  for (const elem of transport) {
    if (elem.checked) {
      console.log(true);
    }
  }
}

// elem.checked = false; - razobratjsa chtobi delal uncheck drugie checkboxi

for (const elem of transport) {
  elem.addEventListener('change', needTransport);
}



showData();
showVisual();
needTransport();










const warehouses = [
  {
    size: '4',
    prices: {
      '1 mes': 55,
      '2 mes': 49,
      '3-6 mes': 45,
      '6-12 mes': 45,
      '> 12 mes': 45,
      '> 24 mes': 45,
    },
    payment: {
      'oplata za 6': 40,
      'oplata za 12': 37
    }
  }
];


console.log(warehouses);







