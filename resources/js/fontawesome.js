// Vue font awesome
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { library } from '@fortawesome/fontawesome-svg-core'

// Solid
import {
    faCheck, faCrown, faCube, faUser, faCamera, faHeart, faTrash, faFlag, faTrashAlt, faSearch,
    faAngleDown
} from '@fortawesome/free-solid-svg-icons'
library.add(
    faUser, faCrown, faCheck, faCube, faCamera, faHeart, faTrash, faFlag, faTrashAlt, faSearch,
    faAngleDown
);

//Regular
import {
    faHeart as farHeart
} from '@fortawesome/free-regular-svg-icons'
library.add(
    farHeart
)

// Export
export { FontAwesomeIcon };