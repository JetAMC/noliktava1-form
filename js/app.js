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

// prices: {
//   'one': {
//     imanta: 55,
//     teika: 65,
//   },



const warehouses = [
  {
    size: '4',
    prices: {
      'one': 55,
      'two': 49,
      'three-to-six': 45,
      'six-to-twelve': 45,
      'twelve': 45,
      'twenty-four': 45
    },
    payment: {
      'for-six': 40,
      'for-twelve': 37
    }
  },
  {
    size: '5',
    prices: {
      'one': 65,
      'two': 59,
      'three-to-six': 55,
      'six-to-twelve': 55,
      'twelve': 55,
      'twenty-four': 55
    },
    payment: {
      'for-six': 50,
      'for-twelve': 47
    }
  },
  {
    size: '7',
    prices: {
      'one': 85,
      'two': 75,
      'three-to-six': 69,
      'six-to-twelve': 69,
      'twelve': 69,
      'twenty-four': 69
    },
    payment: {
      'for-six': 62,
      'for-twelve': 57
    }
  },
  {
    size: '10',
    prices: {
      'one': 110,
      'two': 97,
      'three-to-six': 89,
      'six-to-twelve': 89,
      'twelve': 89,
      'twenty-four': 89
    },
    payment: {
      'for-six': 81,
      'for-twelve': 75
    }
  },
  {
    size: '15',
    prices: {
      'one': 129,
      'two': 115,
      'three-to-six': 105,
      'six-to-twelve': 105,
      'twelve': 105,
      'twenty-four': 105
    },
    payment: {
      'for-six': 94,
      'for-twelve': 85
    }
  },
  {
    size: '30',
    prices: {
      'one': 189,
      'two': 179,
      'three-to-six': 169,
      'six-to-twelve': 169,
      'twelve': 169,
      'twenty-four': 155
    },
    payment: {
      'for-six': 159,
      'for-twelve': 149
    }
  }
];







// first step change area order
let clientWarehouse = 'centrs';
let clientTerm = 'two';
let clientSize = '7';

const clientObj = {
  'client-warehouse': 'centrs',
  'client-term': 'two',
  'client-size': '7'
}

// sdelatj objekt iz etih znachenij

const defaultFirstWarehouse = 'imanta';

const defaultWarehouse = document.querySelector('.' + defaultFirstWarehouse);
const firstElement = document.querySelector('.' + clientWarehouse);

const parent = defaultWarehouse.parentNode;

parent.insertBefore(firstElement, parent.firstChild);



// First AND Second step track which AREA and TERM was selected
const selectedArea = document.querySelectorAll('input[name="area"]');
const selectedTerm = document.querySelectorAll('input[name="term"]');
const selectedSize = document.querySelectorAll('input[name="size"]');

const dropdownArea = document.querySelector('.final-area');
const dropdownTerm = document.querySelector('.final-term');
const dropdownSize = document.querySelector('.final-size');

const priceOne = document.querySelector('.price-one');
const priceSix = document.querySelector('.price-six');
const priceTwelve = document.querySelector('.price-twelve');

function showFinalSum() {
  warehouses.find((w) => {
    if (w.size === dropdownSize.value) {
      priceOne.textContent = w.prices[dropdownTerm.value];
      priceSix.textContent = w.payment['for-six'];
      priceTwelve.textContent = w.payment['for-twelve'];
    }
  });
}

// function showData(inputArr, clientData, dropdown) {
//   console.log(dropdownSize);
//   for (const input in inputArr) {
//     if (clientData === inputArr[input].value) {
//       inputArr[input].checked = true;
//     }
//     if (inputArr[input].checked) {
//       dropdown.value = inputArr[input].value;
//     }
//   }
//   clientData = '';
//   showFinalSum();
// }

// showData(selectedArea, clientObj['client-warehouse'], dropdownArea);
// showData(selectedTerm, clientObj['client-term'], dropdownTerm);
// showData(selectedSize, clientObj['client-size'], dropdownSize);

function showData() { // 3 argumenta (selectedarea, clientwarehouse - menjatj znachenie po polju objekta, dropdownarea - primer)
  // area
  for (const input of selectedArea) {
    if (clientWarehouse === input.value) {
      input.checked = true;
    }
    if (input.checked) {
      dropdownArea.value = input.value;
    }
  }
  // term
  for (const input of selectedTerm) {
    if (clientTerm === input.value) {
      input.checked = true;
    }
    if (input.checked) {
      dropdownTerm.value = input.value;
    }
  }
  // size
  for (const input of selectedSize) {
    if (clientSize === input.value) {
      input.checked = true;
    }
    if (input.checked) {
      dropdownSize.value = input.value;
    }
  }

  clientWarehouse = '';
  clientTerm = '';
  clientSize = '';

  showFinalSum();
}

dropdownSize.addEventListener('change', showFinalSum);

const arr = [selectedArea, selectedTerm, selectedSize];

for (const element of arr) {
  for (const input of element) {
    input.addEventListener('change', showData);
  }
}




// Third step track which SIZE was selected
const visualSize = document.querySelectorAll('.tab__visual');

function showVisual() {
  for (const key of visualSize) {
    key.style.display = 'none';
  }

  for (let i = 0; i < selectedSize.length; i++) {
    // if (selectedSize[i].value === clientSize) {
    //   selectedSize[i].checked = true;
    // }
    if (selectedSize[i].checked && selectedSize[i].value === visualSize[i].id) {
      // console.log(selectedSize[i].value);
      visualSize[i].style.display = 'flex';
      // dropdownSize.value = selectedSize[i].value;
    }
  }
  // clientSize = '';
}

for (const size of selectedSize) {
  size.addEventListener('change', showVisual);
}





// transport needed
const transport = document.querySelectorAll('input[name="transport"]'); // raznij name u kazhdogo checkbox

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



// showData();
showVisual();
// needTransport();
















