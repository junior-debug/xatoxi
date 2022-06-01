function inputMasked(domElement, minimus, maximus, decimals) {
   let inputToMask = IMask(document.getElementById(domElement), {
      mask: Number,
      scale: decimals,
      signed: false,
      thousandsSeparator: ".",
      padFractionalZeros: false,
      normalizeZeros: true,
      radix: ",",
      mapToRadix: ["."],
      min: minimus,
      max: maximus,
      lazy: false, // make placeholder always visible
      placeholderChar: " ",
   });

   return inputToMask;
}
