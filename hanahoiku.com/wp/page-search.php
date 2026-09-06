
	<?php
	/**
	 * The template for displaying search results pages.
	 *
	 * @package WordPress
	 * @subpackage hanahoiku
	 * @since Twenty Fifteen 1.0
	 */

	get_header('recruit'); ?>

	<div id="search">
		<div class="header">
			<h3>
				募集している園舎を探す
			</h3>
		</div>
		<!-- /.header -->
		<div class="group">
<?php
if ( function_exists( 'feas_search_form' ) ) {
	feas_search_form();
}
?>
		</div>
		<!-- /.group -->
	</div>
	<!-- /#search -->

	<div id="footerimg">
		<?php if (is_mobile()) { ?>
			<?php
			$image = get_field('footerimg02');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if ($image) {
				echo wp_get_attachment_image($image, $size);
			}
			?>
		<?php } else { ?>
			<?php
			$image = get_field('footerimg01');
			$size = 'full'; // (thumbnail, medium, large, full or custom size)
			if ($image) {
				echo wp_get_attachment_image($image, $size);
			}
			?>
		<?php } ?>
	</div>
	<!-- /#footerimg -->

	<?php get_footer('recruit'); ?>
	<?php if(is_mobile()){ ?>
		<script>
			jQuery(function($) {
				$("#search form dl dt").on("click", function() {
					/*クリックでコンテンツを開閉*/
					$(this).next().slideToggle(200);
					/*矢印の向きを変更*/
					$(this).toggleClass("open", 200);
				});
			});
		</script>
	<?php } else { ?>
	
	<?php } ?>
<!-- <script>
	const checkbox = document.getElementsByName('search_element_3[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script> -->
<!-- <script>
	const checkbox = document.getElementsByName('search_element_0[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script>
<script>
	const checkbox = document.getElementsByName('search_element_1[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script>
<script>
	const checkbox = document.getElementsByName('search_element_2[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script>
<script>
	const checkbox = document.getElementsByName('search_element_3[]');
const storage = sessionStorage;

document.addEventListener('DOMContentLoaded', () => {
    autoCheck();
    checkbox.forEach((element) => {
        element.addEventListener('change', (e) => {
            if (e.target.checked) {
                storage[e.target.id] = true;
            } else {
                storage.removeItem(e.target.id);
            }
        });
    });

    document.getElementById('boxform').addEventListener('submit', (e) => {
        e.preventDefault();
        const myForm = document.createElement('form');
        myForm.setAttribute('action', 'index.php');
        myForm.setAttribute('method', 'POST');
        const checkedValues = document.createElement('input');
        checkedValues.setAttribute('type', 'hidden');
        checkedValues.setAttribute('name', 'myCheckbox');
        checkedValues.setAttribute('value', joinSavedCheckBoxes());
        myForm.appendChild(checkedValues);
        document.getElementsByTagName('body')[0].append(myForm);
        myForm.submit();
        storage.clear();
    });
});

const joinSavedCheckBoxes = () => {
    const checkboxes = [];
    for(let i=0, len=storage.length; i<len; i++) {
        if(storage.key(i).indexOf('checkbox_') === 0) {
            checkboxes.push(storage.key(i));
        }
    }
    return checkboxes.join(',');
}

const autoCheck = () => {
    checkbox.forEach((element) => {
        if(storage[element.id]) {
            element.checked = true;
        }
    });
};
</script> -->