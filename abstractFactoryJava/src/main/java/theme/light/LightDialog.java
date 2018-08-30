package theme.light;

import theme.DialogInterface;

/**
 * The dialog component of the light theme.
 */
public class LightDialog implements DialogInterface {

    /**
     * {@inheritDoc}
     */
    public void show() {
        System.out.println( "Light dialog showed !" );
    }
}
