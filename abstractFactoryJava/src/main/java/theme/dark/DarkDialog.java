package theme.dark;

import theme.DialogInterface;

/**
 * The dialog component of the dark theme.
 */
public class DarkDialog implements DialogInterface {

    /**
     * {@inheritDoc}
     */
    public void show() {
        System.out.println( "Dark dialog showed !" );
    }
}
