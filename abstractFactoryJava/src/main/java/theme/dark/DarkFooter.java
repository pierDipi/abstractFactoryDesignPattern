package theme.dark;

import theme.FooterInterface;

/**
 * The footer component of the dark theme.
 */
public class DarkFooter implements FooterInterface {

    /**
     * {@inheritDoc}
     */
    public void show() {
        System.out.println( "Dark footer showed !" );
    }
}
