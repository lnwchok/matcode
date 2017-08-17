function calcCase(mainpart) {
  let res = 0;
  switch (mainpart.toUpperCase()) {
    // Art.1 Pipe
    case 'P' :
      res = 1;
      break;
    // Art.2 Fitting
    case 'E' :
    case 'R' :
    case 'T' :
    case 'C' :
    case 'J' :
    case 'K' :
    case 'N' :
    case 'U' :
      res = 2;
      break;
    // Art.3 Bender pipe
    case 'D' :
      res = 3;
      break;
    // Art.4 Flange
    case 'F' :
      res = 4;
      break;
    // Art.6 Stub End
    case 'S' :
      res = 6;
      break;
    // Art.7 Plug
    case 'L' :
      res = 7;
      break;
    // Art.8 Gasket
    case 'G' :
      res = 8;
      break;
    // Art.9 Bolt/Nut
    case 'B' :
      res = 9;
      break;
    default :
    }   return res;
};

function arrangeBoxs(calc) {
  let res = [];
    switch (calc) {
      // Calc = 1 :: Pipe
      case 1 :
        res = ['thickness'];
        break;
      // Calc = 2 :: Fitting
      case 2 :
        res = ['types', 'thickness', 'connections'];
        break;
      // Calc = 3 :: Bender Pipe
      case 3 :
        break;
      // Calc = 4 :: Flange
      case 4 :
        res = ['types', 'rating', 'thickness', 'facing'];
        break;
      // Calc = 6 :: Stub-End
      case 6 :
        res = ['types', 'rating', 'thickness', 'facing'];
        break;
      case 5 :
        break;
        // Calc = 7 :: Plug
      case 7 :
        res = ['types', 'rating', 'thickness', 'facing'];        
        break;
      // Calc = 8 :: Gasket
      case 8 :
        res = ['types', 'rating', 'thickness', 'facing'];
        break;
      // Calc = 9 :: Bolt/Nut
      case 9 :
        res = ['types'];
        break;
      default :
    } return res
};

module.exports = {
  updateBoxs(mainpart, result) {
    let calcGroup = calcCase(mainpart);

    return calcGroup;
  },


}
