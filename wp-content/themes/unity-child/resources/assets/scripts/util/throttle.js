/**
 * Handy function to throttle functions.
 */
const throttle = (fn, wait) => {
  var time = Date.now();
  return function() {
    if (time + wait - Date.now() < 0) {
      fn();
      time = Date.now();
    }
  };
};

export default throttle;
