const enableStepHexagons = (steps) => {
   switch (steps) {
      case "1":
         hideAllSteps();
         setStep("hexa-step04", "stepText04", "I");
         break;
      case "2":
         hideAllSteps();
         setStep("hexa-step03", "stepText03", "I");
         setStep("hexa-step05", "stepText05", "II");
         break;
      case "3":
         hideAllSteps();
         setStep("hexa-step02", "stepText02", "I");
         setStep("hexa-step04", "stepText04", "II");
         setStep("hexa-step06", "stepText06", "III");
         break;
      case "4":
         hideAllSteps();
         setStep("hexa-step01", "stepText01", "I");
         setStep("hexa-step03", "stepText03", "II");
         setStep("hexa-step05", "stepText05", "III");
         setStep("hexa-step07", "stepText07", "IV");
         break;
      case "5":
         hideAllSteps();
         setStep("hexa-step02", "stepText02", "I");
         setStep("hexa-step03", "stepText03", "II");
         setStep("hexa-step04", "stepText04", "III");
         setStep("hexa-step05", "stepText05", "IV");
         setStep("hexa-step06", "stepText06", "V");
         break;
      case "6":
         hideAllSteps();
         setStep("hexa-step01", "stepText01", "I");
         setStep("hexa-step02", "stepText02", "II");
         setStep("hexa-step03", "stepText03", "III");
         setStep("hexa-step04", "stepText04", "IV");
         setStep("hexa-step05", "stepText05", "V");
         setStep("hexa-step06", "stepText06", "VI");
         break;
      case "7":
         hideAllSteps();
         setStep("hexa-step01", "stepText01", "I");
         setStep("hexa-step02", "stepText02", "II");
         setStep("hexa-step03", "stepText03", "III");
         setStep("hexa-step04", "stepText04", "IV");
         setStep("hexa-step05", "stepText05", "V");
         setStep("hexa-step06", "stepText06", "VI");
         setStep("hexa-step07", "stepText07", "VII");
         break;
   }
};

function disableStep(color) {
   for (let step = 1; step < 8; step++) {
      let leftStep = "";
      let rightStep = "";
      let middleStep = "";

      leftStep = document.getElementById("step0" + step + "partA");
      rightStep = document.getElementById("step0" + step + "partB");
      middleStep = document.getElementById("step0" + step + "partC");

      leftStep.classList.remove(color);
      rightStep.classList.remove(color);
      middleStep.classList.remove(color);

      leftStep.classList.add("gray");
      rightStep.classList.add("gray");
      middleStep.classList.add("gray");
   }
}

function activeStep(step, color) {
   disableStep(color);
   const leftStep = document.getElementById("step0" + step + "partA");
   const rightStep = document.getElementById("step0" + step + "partB");
   const middleStep = document.getElementById("step0" + step + "partC");

   leftStep.classList.remove("gray");
   rightStep.classList.remove("gray");
   middleStep.classList.remove("gray");

   leftStep.classList.add(color);
   rightStep.classList.add(color);
   middleStep.classList.add(color);
}

function setStep(stepClass, stepId, number) {
   document.getElementsByClassName(stepClass)[0].classList.remove("dis");
   document.getElementById(stepId).innerText = "";
   document.getElementById(stepId).classList.add(number);
}

const hideAllSteps = () => {
   for (let i = 1; i < 8; i++) {
      document.getElementsByClassName("hexa-step0" + i)[0].classList.add("dis");
      ["I", "II", "III", "IV", "V", "VI", "VII"].forEach((e) => {
         document.getElementById("stepText0" + i).classList.remove(e);
      });
   }
};

hideAllSteps();

const showAllSteps = () => {
   for (let i = 1; i < 8; i++) {
      document
         .getElementsByClassName("hexa-step0" + i)[0]
         .classList.remove("dis");
   }
};

function changerSteps(stepGroup, step, color) {
   disableStep(color);
   switch (stepGroup) {
      case "7":
         enableStepHexagons(stepGroup);
         activeStep(step, color);
         break;
      case "6":
         enableStepHexagons(stepGroup);
         activeStep(step, color);
         break;
      case "5":
         enableStepHexagons(stepGroup);
         switch (step) {
            case "1":
               activeStep("2", color);
               break;
            case "2":
               activeStep("3", color);
               break;
            case "3":
               activeStep("4", color);
               break;
            case "4":
               activeStep("5", color);
               break;
            case "5":
               activeStep("6", color);
               break;
         }
         break;
      case "4":
         enableStepHexagons(stepGroup);
         switch (step) {
            case "1":
               activeStep("1", color);
               break;
            case "2":
               activeStep("3", color);
               break;
            case "3":
               activeStep("5", color);
               break;
            case "4":
               activeStep("7", color);
               break;
         }
         break;
      case "3":
         enableStepHexagons(stepGroup);
         switch (step) {
            case "1":
               activeStep("2", color);
               break;
            case "2":
               activeStep("4", color);
               break;
            case "3":
               activeStep("6", color);
               break;
         }
         break;
      case "2":
         enableStepHexagons(stepGroup);
         switch (step) {
            case "1":
               activeStep("3", color);
               break;
            case "2":
               activeStep("5", color);
               break;
         }
         break;
      case "1":
         enableStepHexagons(stepGroup);
         activeStep("4", color);
         break;
   }
}
