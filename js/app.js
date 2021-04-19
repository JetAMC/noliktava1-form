let currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");
    // This function will display the specified tab of the form ...
    let tab = document.getElementsByClassName("tab");
    tab[n].style.display = "flex";
    // ... and fix the Previous/Next buttons:
    n === 0 || n === tab.length - 1 ? prevBtn.style.display = "none" : prevBtn.style.display = "inline";
    n === tab.length - 1 ? nextBtn.style.display = "none" : nextBtn.style.display = "inline";
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




const warehouses = [
  {
    size: '4',
    prices: {
      'one': {
        'centrs': 55,
        'zolitude': 55,
        'purvciems': 55,
        'imanta': 55,
        'teika': 55,
        'krasta': 55,
        'ziepniekkalns': 55
      },
      'two': {
        'centrs': 49,
        'zolitude': 49,
        'purvciems': 49,
        'imanta': 49,
        'teika': 49,
        'krasta': 49,
        'ziepniekkalns': 49
      },
      'three-to-six': {
        'centrs': 45,
        'zolitude': 45,
        'purvciems': 45,
        'imanta': 45,
        'teika': 45,
        'krasta': 45,
        'ziepniekkalns': 45
      },
      'six-to-twelve': {
        'centrs': 45,
        'zolitude': 45,
        'purvciems': 45,
        'imanta': 45,
        'teika': 45,
        'krasta': 45,
        'ziepniekkalns': 45
      },
      'twelve': {
        'centrs': 45,
        'zolitude': 45,
        'purvciems': 45,
        'imanta': 45,
        'teika': 45,
        'krasta': 45,
        'ziepniekkalns': 45
      },
      'twenty-four': {
        'centrs': 40,
        'zolitude': 40,
        'purvciems': 40,
        'imanta': 40,
        'teika': 40,
        'krasta': 40,
        'ziepniekkalns': 40
      }
    },
    payment: {
      'for-six': 40,
      'for-twelve': 37
    }
  },
  {
    size: '5',
    prices: {
      'one': {
        'centrs': 65,
        'zolitude': 65,
        'purvciems': 65,
        'imanta': 65,
        'teika': 65,
        'krasta': 65,
        'ziepniekkalns': 65
      },
      'two': {
        'centrs': 59,
        'zolitude': 59,
        'purvciems': 59,
        'imanta': 59,
        'teika': 59,
        'krasta': 59,
        'ziepniekkalns': 59
      },
      'three-to-six': {
        'centrs': 55,
        'zolitude': 55,
        'purvciems': 55,
        'imanta': 55,
        'teika': 55,
        'krasta': 55,
        'ziepniekkalns': 55
      },
      'six-to-twelve': {
        'centrs': 55,
        'zolitude': 55,
        'purvciems': 55,
        'imanta': 55,
        'teika': 55,
        'krasta': 55,
        'ziepniekkalns': 55
      },
      'twelve': {
        'centrs': 55,
        'zolitude': 55,
        'purvciems': 55,
        'imanta': 55,
        'teika': 55,
        'krasta': 55,
        'ziepniekkalns': 55
      },
      'twenty-four': {
        'centrs': 50,
        'zolitude': 50,
        'purvciems': 50,
        'imanta': 50,
        'teika': 50,
        'krasta': 50,
        'ziepniekkalns': 50
      }
    },
    payment: {
      'for-six': 50,
      'for-twelve': 47
    }
  },
  {
    size: '7',
    prices: {
      'one': {
        'centrs': 85,
        'zolitude': 85,
        'purvciems': 85,
        'imanta': 85,
        'teika': 85,
        'krasta': 85,
        'ziepniekkalns': 85
      },
      'two': {
        'centrs': 75,
        'zolitude': 75,
        'purvciems': 75,
        'imanta': 75,
        'teika': 75,
        'krasta': 75,
        'ziepniekkalns': 75
      },
      'three-to-six': {
        'centrs': 69,
        'zolitude': 69,
        'purvciems': 69,
        'imanta': 69,
        'teika': 69,
        'krasta': 69,
        'ziepniekkalns': 69
      },
      'six-to-twelve': {
        'centrs': 69,
        'zolitude': 69,
        'purvciems': 69,
        'imanta': 69,
        'teika': 69,
        'krasta': 69,
        'ziepniekkalns': 69
      },
      'twelve': {
        'centrs': 69,
        'zolitude': 69,
        'purvciems': 69,
        'imanta': 69,
        'teika': 69,
        'krasta': 69,
        'ziepniekkalns': 69
      },
      'twenty-four': {
        'centrs': 62,
        'zolitude': 62,
        'purvciems': 62,
        'imanta': 62,
        'teika': 62,
        'krasta': 62,
        'ziepniekkalns': 62
      }
    },
    payment: {
      'for-six': 62,
      'for-twelve': 57
    }
  },
  {
    size: '10',
    prices: {
      'one': {
        'centrs': 110,
        'zolitude': 110,
        'purvciems': 110,
        'imanta': 110,
        'teika': 110,
        'krasta': 110,
        'ziepniekkalns': 110
      },
      'two': {
        'centrs': 97,
        'zolitude': 97,
        'purvciems': 97,
        'imanta': 97,
        'teika': 97,
        'krasta': 97,
        'ziepniekkalns': 97
      },
      'three-to-six': {
        'centrs': 89,
        'zolitude': 89,
        'purvciems': 89,
        'imanta': 89,
        'teika': 89,
        'krasta': 89,
        'ziepniekkalns': 89
      },
      'six-to-twelve': {
        'centrs': 89,
        'zolitude': 89,
        'purvciems': 89,
        'imanta': 89,
        'teika': 89,
        'krasta': 89,
        'ziepniekkalns': 89
      },
      'twelve': {
        'centrs': 89,
        'zolitude': 89,
        'purvciems': 89,
        'imanta': 89,
        'teika': 89,
        'krasta': 89,
        'ziepniekkalns': 89
      },
      'twenty-four': {
        'centrs': 81,
        'zolitude': 81,
        'purvciems': 81,
        'imanta': 81,
        'teika': 81,
        'krasta': 81,
        'ziepniekkalns': 81
      }
    },
    payment: {
      'for-six': 81,
      'for-twelve': 75
    }
  },
  {
    size: '15',
    prices: {
      'one': {
        'centrs': 129,
        'zolitude': 129,
        'purvciems': 129,
        'imanta': 129,
        'teika': 129,
        'krasta': 129,
        'ziepniekkalns': 129
      },
      'two': {
        'centrs': 115,
        'zolitude': 115,
        'purvciems': 115,
        'imanta': 115,
        'teika': 115,
        'krasta': 115,
        'ziepniekkalns': 115
      },
      'three-to-six': {
        'centrs': 105,
        'zolitude': 105,
        'purvciems': 105,
        'imanta': 105,
        'teika': 105,
        'krasta': 105,
        'ziepniekkalns': 105
      },
      'six-to-twelve': {
        'centrs': 105,
        'zolitude': 105,
        'purvciems': 105,
        'imanta': 105,
        'teika': 105,
        'krasta': 105,
        'ziepniekkalns': 105
      },
      'twelve': {
        'centrs': 105,
        'zolitude': 105,
        'purvciems': 105,
        'imanta': 105,
        'teika': 105,
        'krasta': 105,
        'ziepniekkalns': 105
      },
      'twenty-four': {
        'centrs': 95,
        'zolitude': 95,
        'purvciems': 95,
        'imanta': 95,
        'teika': 95,
        'krasta': 95,
        'ziepniekkalns': 95
      }
    },
    payment: {
      'for-six': 94,
      'for-twelve': 85
    }
  },
  {
    size: '30',
    prices: {
      'one': {
        'centrs': 189,
        'zolitude': 189,
        'purvciems': 189,
        'imanta': 189,
        'teika': 189,
        'krasta': 189,
        'ziepniekkalns': 189
      },
      'two': {
        'centrs': 179,
        'zolitude': 179,
        'purvciems': 179,
        'imanta': 179,
        'teika': 179,
        'krasta': 179,
        'ziepniekkalns': 179
      },
      'three-to-six': {
        'centrs': 169,
        'zolitude': 169,
        'purvciems': 169,
        'imanta': 169,
        'teika': 169,
        'krasta': 169,
        'ziepniekkalns': 169
      },
      'six-to-twelve': {
        'centrs': 169,
        'zolitude': 169,
        'purvciems': 169,
        'imanta': 169,
        'teika': 169,
        'krasta': 169,
        'ziepniekkalns': 169
      },
      'twelve': {
        'centrs': 169,
        'zolitude': 169,
        'purvciems': 169,
        'imanta': 169,
        'teika': 169,
        'krasta': 169,
        'ziepniekkalns': 169
      },
      'twenty-four': {
        'centrs': 159,
        'zolitude': 159,
        'purvciems': 159,
        'imanta': 159,
        'teika': 159,
        'krasta': 159,
        'ziepniekkalns': 159
      }
    },
    payment: {
      'for-six': 159,
      'for-twelve': 149
    }
  }
];


// catch selected fields from Tilda and save it to clientObj
const dataFromTilda = window.location.search;
const tildaArr = dataFromTilda.slice(1).split("&");

const tildaArea = tildaArr[0];
const tildaTerm = tildaArr[1];
const tildaSize = tildaArr[2];

const clientObj = {
  'client-warehouse': tildaArea,
  'client-term': tildaTerm,
  'client-size': tildaSize
}

// first step change area order based on what client have chosen on tilda website
const defaultWarehouse = document.querySelector('.' + 'zolitude');
const firstElement = document.querySelector('.' + clientObj['client-warehouse']);
const parent = defaultWarehouse.parentNode;

parent.insertBefore(firstElement, parent.firstChild);


const selectedArea = document.querySelectorAll('input[name="area"]');
const selectedTerm = document.querySelectorAll('input[name="term"]');
const selectedSize = document.querySelectorAll('input[name="size"]');

const dropdownArea = document.querySelector('.final-area');
const dropdownTerm = document.querySelector('.final-term');
const dropdownSize = document.querySelector('.final-size');

const priceForPaysera = document.querySelectorAll('input[name="payment"]');

const priceOne = document.querySelector('.price-one');
const priceSix = document.querySelector('.price-six');
const priceTwelve = document.querySelector('.price-twelve');

const fullOne = document.querySelector('.fullOne');
const fullSix = document.querySelector('.fullSix');
const fullTwelve = document.querySelector('.fullTwelve');

const profitSix = document.querySelector('.profit-six');
const profitTwelve = document.querySelector('.profit-twelve');



const priceArr = [fullOne, fullSix, fullTwelve];



// show sum on last step based on area size AND term + count sum with discount and add deposit and transfer to paysera
function showPriceForPaysera() {
  const size = dropdownSize.value;
  const area = dropdownArea.value;
  const term = dropdownTerm.value;

  // show prices in radio buttons
  warehouses.find((w) => {
    if (w.size === size) {
      priceOne.textContent = w.prices[term][area];
      priceSix.textContent = w.payment['for-six'];
      priceTwelve.textContent = w.payment['for-twelve'];
    }
  });

  // count profit if client want to pay for six or twelve months
  const countProfitSix = priceOne.textContent * 6 - priceSix.textContent * 6;
  const countProfitTwelve = priceOne.textContent * 12 - priceTwelve.textContent * 12;

  // show profit in span
  profitSix.textContent = countProfitSix;
  profitTwelve.textContent = countProfitTwelve;

  // show full price if pay for six or twelve months
  fullSix.textContent = priceSix.textContent * 6;
  fullTwelve.textContent = priceTwelve.textContent * 12;

  // 6 months - first month - 50%
  // fullSix.textContent = priceSix.textContent * 6 - priceSix.textContent / 2;
  // 12 months - first and last month - 50%
  // fullTwelve.textContent = priceTwelve.textContent * 12 - priceTwelve.textContent;

  const priceWithDepositObj = {
    'price-one fullOne': priceOne.textContent * 2,
    'fullSix': Number(fullSix.textContent) + Number(priceSix.textContent),
    'fullTwelve': Number(fullTwelve.textContent) + Number(priceTwelve.textContent)
  }

  const checkedRadio = document.querySelectorAll('.custom-radio-final');
  // add deposit to selected value
  for (let i = 0; i < priceForPaysera.length; i++) {
    if (priceForPaysera[i].checked) {
      priceForPaysera[i].value = priceWithDepositObj[priceArr[i].className];
      checkedRadio[i].style.border = "2px solid #991010";
      console.log(priceForPaysera[i].value);
    } else {
      checkedRadio[i].style.border = "1px solid #C4C4C4";
    }
    
  }
}

for (const input of priceForPaysera) {
  input.addEventListener('change', showPriceForPaysera);
}



// add event when chaning size of warehouse in dropdown (one the last step);
const dropdownArr = [dropdownSize, dropdownArea, dropdownTerm];
dropdownArr.map(elem => elem.addEventListener('change', showPriceForPaysera));



// show client data, let client choose another option AND show his choice in dropdowns (on the last step)
function showData(inputArr, clientData, dropdown) {
  for (const input of inputArr) {
    clientData === input.value ? input.checked = true : undefined;
    input.checked ? dropdown.value = input.value : undefined;
  }
  
  for (const elem in clientObj) {
    clientData === clientObj[elem] ? clientObj[elem] = '' : undefined;
  }

  showPriceForPaysera();
}



// add event when choosing another input
for (const input of selectedArea) {
  input.addEventListener('change', () => showData(selectedArea, clientObj['client-warehouse'], dropdownArea));
}

for (const input of selectedTerm) {
  input.addEventListener('change', () => showData(selectedTerm, clientObj['client-term'], dropdownTerm));
}

for (const input of selectedSize) {
  input.addEventListener('change', () => showData(selectedSize, clientObj['client-size'], dropdownSize));
}



// Third step show DIV information based on which radio button have chosen
const visualSize = document.querySelectorAll('.tab__visual');

function showVisual() {
  for (const key of visualSize) {
    key.style.display = 'none';
  }

  for (let i = 0; i < selectedSize.length; i++) {
    if (selectedSize[i].checked && selectedSize[i].value === visualSize[i].id) {
      visualSize[i].style.display = 'flex';
    }
  }
}

for (const size of selectedSize) {
  size.addEventListener('change', showVisual);
}





// // transport needed
// const transport = document.querySelectorAll('input[name="transport"]'); // raznij name u kazhdogo checkbox

// function needTransport() {
//   for (const elem of transport) {
//     if (elem.checked) {
//       console.log(true);
//     }
//   }
// }

// // elem.checked = false; - checkbox unchecked

// for (const elem of transport) {
//   elem.addEventListener('change', needTransport);
// }


showData(selectedArea, clientObj['client-warehouse'], dropdownArea);
showData(selectedTerm, clientObj['client-term'], dropdownTerm);
showData(selectedSize, clientObj['client-size'], dropdownSize);

showVisual();
// needTransport();



// Image Zoom

const modal = document.querySelector(".modal");
const modalImg = document.querySelector(".modal-content");
const closeSpan = document.querySelector(".close");
const allImages = document.querySelectorAll(".zoom-images");

for (const img of allImages) {
  img.addEventListener("click", () => {
    modal.style.display = "block";
    modalImg.src = img.src;
  })
}

const closeElements = [closeSpan, modal];

closeElements.map(close => {
  close.addEventListener('click', () => {
    modal.style.display = "none";
  });
});














