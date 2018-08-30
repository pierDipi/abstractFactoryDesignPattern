package theme.light;

import theme.FooterInterface;

/**
 * The footer component of the light theme.
 */
public class LightFooter implements FooterInterface {

    /**
     * {@inheritDoc}
     */
    public void show() {
        System.out.println( "Light footer showed !" );
    }
}
