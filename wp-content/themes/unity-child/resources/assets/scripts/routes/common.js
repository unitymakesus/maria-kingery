import debounce from '../util/debounce';
import throttle from '../util/throttle';
import elemObserver from '../util/elemObserver';
import initMainMenu from '../util/initMainMenu';

export default {
  init() {
    /**
     * Initialize main menu behavior.
     */
    initMainMenu();

    /**
     * Featured Services observer behavior.
     */
    let featuredServices = document.querySelectorAll('.featured-service');
    if (featuredServices.length > 0) {
      elemObserver(featuredServices);

      window.addEventListener('scroll', throttle(() => {
        elemObserver(featuredServices);
      }, 250), false);

      window.addEventListener('resize', debounce(() => {
        elemObserver(featuredServices);
      }, 250), false);
    }
  },
  finalize() {
  },
};
