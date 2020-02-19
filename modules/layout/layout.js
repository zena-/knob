/**
 * Initializes the loop.
 * @constructor
 * @param {Object} el - The site loop.
 */
import ScrollReveal from 'scrollreveal'

function Layout () {
  const posts = document.querySelectorAll('.post--loop')
  var sr = ScrollReveal({ reset: true })
  sr.reveal(posts, { duration: 900, scale: 1 })
}

export default Layout
