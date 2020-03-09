import verge from 'verge';

/**
 * getBoundingClientRect() but for just the top.
 */
const getElementTopOffset = elem => {
  let rect = elem.getBoundingClientRect();

  return {
    top: rect.top + (window.pageYOffset || document.documentElement.scrollTop),
  };
};

/**
 * Is the element in the center of the viewport?
 * @return boolean
 */
const isElemInCenter = elem => {
  let scrollPos = verge.scrollY();
  let viewportBottom = scrollPos + verge.viewportH();
  let viewportMid = viewportBottom - verge.viewportH() / 2;
  let elemStart = getElementTopOffset(elem).top;
  let elemEnd = elemStart + elem.offsetHeight;

  return elemStart <= viewportMid && elemEnd >= viewportMid;
};

/**
 * Check elements to see if they are in the middle of viewport.
 * @param elem [nodeList]
 */
const elemObserver = elems => {
  elems.forEach(elem => {
    elem.classList.remove('in-view');

    if (isElemInCenter(elem)) {
      elem.classList.add('in-view');
    }
  });
};

export default elemObserver;
